<?php

namespace App\Http\Controllers\Financeiro;

use App\Models\Investimento;
use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use MercadoPago\SDK as MP;
use App\Models\Osc;
use Auth;
use Alert;

class CheckoutController extends Controller
{
    public function formIncentivar($id){
        $osc = DB::table('oscs')->find($id);
        return view('dashboard.incentivos.formCheckout',[
            'osc'       => $osc,
            //'projetos'  => $osc->projetos->pluck('descricao','id'),
            'tab'       => 'investir'
        ]);

    }

    public function pagar(Request $request){

        //dd($request->all());

        $osc = DB::table('oscs')->where('id',$request->osc_id)->first();
        
        $investimento = new Investimento();
        $investimento->descricao            = 'Investimento em:'.$osc->nome_fantasia;
        $investimento->valor_investimento   = toMoney($request->valor);
        $investimento->tipo                 = $request->tipo ? $request->tipo : 'Investimento';
        $investimento->operacao             = $request->operacao;
        $investimento->user_id              = $request->user()->id;
        $investimento->projeto_id           = $request->projeto_id;
        $investimento->osc_id               = $request->osc_id;
        $investimento->status               = 'Aguardando Pagamento';
        $investimento->save();

        $pagamento = $this->gerarPagamento($investimento);

        $investimento = Investimento::find($investimento->id);
        $investimento->url = $pagamento->init_point;
        $investimento->save();

        //return redirect()->to($pagamento->init_point);
        return redirect()->to($pagamento->sandbox_init_point);
        
    }

    public function gerarPagamento($investimento){       

        MP::setClientSecret('KDHCM0emBn1CfV64ShWWdcugTYd3nCIZ');
        MP::setClientId('5442329168530937');

        $preference = new \MercadoPago\Preference();

        # Create an item object
        $item               = new \MercadoPago\Item();
        $item->id           = $investimento->osc_id;
        $item->title        = $investimento->descricao;
        $item->quantity     = 1;
        $item->currency_id  = "BRL";
        $item->unit_price   = $investimento->valor_investimento;

        # Create a payer object
        $payer          = new \MercadoPago\Payer();
        $payer->email   = $investimento->usuario()->email;
        $payer->name    = $investimento->usuario()->name;        

        # Setting preference properties
        $preference->items = array($item);
        $preference->payer = $payer;

        # callbacks urls
        $preference->back_urls = array(
            "success" => env('APP_URL').'/dashboard/investimento/success',
            "failure" => env('APP_URL').'/dashboard/investimento/failure',
            "pending" => env('APP_URL').'/dashboard/investimento/pending'
        );

        $preference->auto_return        = "approved";
        $preference->payment_methods = array(
            "excluded_payment_types" => array(
              array("id" => "ticket")
            ),            
          );
        $preference->external_reference = $investimento->id;

        # Save and posting preference
        $response = $preference->save();
        return $response;
    }

    public function usuarioTeste(){
        MP::setAccessToken("TEST-7474015869398412-012321-2b8b21364f6467edb6bda676596b4712-4901986");

        $body = array(
            "json_data" => array(
                "site_id" => "MLB"
            )
        );

        $result = MP::post('/users/test_user', $body);

        var_dump($result);
    }
}
