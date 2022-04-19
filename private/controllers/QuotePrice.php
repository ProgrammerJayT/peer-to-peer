<?php


class QuotePrice extends Controller {

    public function index () {

        $request = new Request();
        $service = new Service();

        $error = array();

        if (isset($_POST['price'])){
            $price = $_POST['price'];

            if(!is_numeric($price)){
                $error['error_price'] = "Price must a numeric value";
            }

            else {
                $data['is_accepted'] = 1;
                $data['serv_price'] = $price;
                $request->accept_request($_GET['id'], $data);

                $this->redirect('requests');
            }
        }

        $this->view('quotation/provider', ['errors' => $error]);
    }

}