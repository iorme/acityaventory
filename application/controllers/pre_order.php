<?php
class Pre_order extends CI_Controller
{
    function __construct ()
    {
        parent::__construct();
        $this->load->model('MPre_order');
    }
    
    public function index()
    {
        $this->input();
    }
    
    public function input()
    {
        $data               = $this->MPre_order->form();
        $data['title']      = "Pre Orders";
        $data['subheader']  = "Input Pre Order";
        $data['main']       = "pre_order/input";
        $this->blade->render('template',$data);
    }
    
    public function save()
    {
        if ($this->input->post('submit')){
            $this->MPre_order->save();
            redirect('pre_order/index');
        }
        
    }
    
    public function show()
    {
    	$data['title']		= "Pre Orders";
    	$data['subheader']	= "List Pre Order";
    	$data['main']		= "pre_order/show";
    	$data['query']		= $this->MPre_order->getAll();
    	$this->blade->render('template', $data);
    }
    
}
