<?php
class ControllerExtensionPaymentBankMandiri extends Controller {
	public function index() {
		$this->load->language('extension/payment/bank_mandiri');

		$data['bank'] = nl2br($this->config->get('payment_bank_mandiri_bank' . $this->config->get('config_language_id')));
        $data['bank_code'] = "bank_mandiri";

		return $this->load->view('extension/payment/bank_mandiri', $data);
	}

	public function confirm() {
		$json = array();
		
		if ($this->session->data['payment_method']['code'] == 'bank_mandiri') {
			$this->load->language('extension/payment/bank_mandiri');

			$this->load->model('checkout/order');

			$comment  = $this->language->get('text_instruction') . "\n\n";
			$comment .= $this->config->get('payment_bank_mandiri_bank' . $this->config->get('config_language_id')) . "\n\n";
			$comment .= $this->language->get('text_payment');

			$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_bank_mandiri_order_status_id'), $comment, true);
		
			$json['redirect'] = $this->url->link('checkout/success');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}