<?php
class MPre_order  extends CI_Model
{
    function __construct ()
    {
       parent::__construct();
    }
    
    function form(){
        $data['po_number']  = array('name'=>'po_number','size'=>'30', 'maxlength'=>'30', 'id'=>'po_number', 'class'=>'input_form');
        $data['date']  = array('name'=>'date','size'=>'30', 'maxlength'=>'30', 'id'=>'date','class'=>'datepicker input_form');
        $data['term_date']  = array('name'=>'term_date','size'=>'30', 'maxlength'=>'30', 'id'=>'term_date','class'=>'datepicker input_form');
	    $data['supplier'] = array('name'=>'supplier','size'=>'30', 'maxlength'=>'30','id'=>'supplier', 'class'=>'input_form');
	    $data['address']       = array('name'=>'desc','cols'=>'35', 'rows'=>'5','id'=>'desc','value'=>'','id'=>'address','class'=>'input_form');
	    $data['desc']       = array('name'=>'desc','cols'=>'35', 'rows'=>'5','id'=>'desc','value'=>'','class'=>'input_form');
	    return $data;
    }
    
      
    function save(){
        $po_number  = $this->input->post('po_number');
        $date  = $this->input->post('date');
        $explode_date = explode("-",$date);
        $implode_date = $explode_date[2]."-".$explode_date[1]."-".$explode_date[0];    
        $term_date = $this->input->post('term_date');
	    $explode_term_date = explode("-",$term_date);
        $implode_term_date = $explode_term_date[2]."-".$explode_term_date[1]."-".$explode_term_date[0];  
        $desc = $this->input->post('item_desc');  

        $supplier_id = $this->input->post('supplier_id');        
        
        $data  = array(
                    'po_number' => $po_number,
                    'date' => $implode_date,
                    'term_date' => $implode_term_date,                          
                    'supplier_id' => $supplier_id,
                    'desc' => $desc,
                  );
        $this->db->insert('pre_orders',$data); //insert to table transactions  
        $inserted_id = $this->db->insert_id(); //get last inserted transaction id
        
        $i=1;
        foreach ($this->input->post('rows') as $key => $count ) //looping insert items to table _details
        {
          
          $item_id 	 = $this->input->post('item_id_'.$i);
          $order_price	 = $this->input->post('item_price_'.$i);
          $amount  		 = $this->input->post('item_amount_'.$i);
          $desc 		 = $this->input->post('item_desc_'.$i);
          $i++;
        
          $data_details = array(
                                'po_id' => $inserted_id,
                                'item_id'        => $item_id,
                                'order_price'    => $order_price,
                                'amount'         => $amount,
                                'desc'           => $desc
                            );
          $this->db->insert('pre_orders_details',$data_details);
          
        }           
        
    }
    
    function getAll(){ //get all pre order record
    	$this->db->select("po.id,po.po_number");
    	$this->db->select("date_format(po.date,'%d-%m-%Y') AS date",FALSE);			
    	$this->db->select("date_format(po.term_date,'%d-%m-%Y') AS term_date",FALSE);
    	$this->db->select("po.total,po.desc AS description");
    	$this->db->select("s.name AS supplier_name",FALSE);
        // $this->db->from('pre_orders');
        $this->db->join('suppliers as s','s.id=po.supplier_id');
        $this->db->order_by('po.id','ASC');
        $query = $this->db->get('pre_orders as po');
    
        return $query->result();
    } 

}
