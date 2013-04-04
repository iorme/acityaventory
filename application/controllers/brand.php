<?php
#doc
#    classname:    Brand
#    scope:        PUBLIC
#
#/doc

class Brand extends CI_Controller
{
    
    function __construct ()
    {
       parent::__construct();
       $this->load->model('MBrand');
       
    }
    
    public function index()
    {
        $this->input();
    }
    
    public function input()
    {
        $data               = $this->MBrand->form();
        $data['title']      = 'Brands';
        $data['subheader']  = 'Setup Brands';
        
        $data['query'] = $this->MBrand->getAll(); //get data from database
        $data['main']  =  'brand/input';
        $this->blade->render('template',$data);
    }
    
    function submit()
    {
        if ($this->input->post('ajax')){ // submited data with ajax
            $this->form_validation->set_rules('brand_name', 'Brand Name', 'required');
            $this->form_validation->set_rules('desc', 'Description', 'required');
            if ($this->form_validation->run() == FALSE){ // if validation error
                $validation = validation_errors();
                $message = preg_replace("/(\r|\n)/","",$validation); //clear break
                $this->blade->render('add_notice',array('message' => $message));
                
            }else{ // validation true
                if ($this->input->post('id')>0){ //if have id then update                    
                    
                    $this->MBrand->update();
                    $data['title']      = 'Brands';
                    $data['query'] = $this->MBrand->getAll();
                    $this->blade->render('brand/show',$data);
                }else{ //don't have id then save / add data
                    $this->MBrand->save();
                    $data['title']      = 'Brands';
                    $data['query'] = $this->MBrand->getAll();
                    $this->blade->render('brand/show',$data);
                }
                
            }
        }else{ //submited without ajax (if javascript disabled)
            if ($this->input->post('submit')){
                $this->form_validation->set_rules('brand_name', 'Brand Name', 'required');
                $this->form_validation->set_rules('desc', 'Description', 'required');
                if ($this->form_validation->run() == FALSE){
                    $data               = $this->MBrand->form();                   
                    
                    $data['title']          = 'Brands';
                    $data['subheader']      = 'Setup Brands';
                    $data['message']        = validation_errors();
                    $data['brand_name']['value']  = set_value('brand_name');
                    $data['desc']['value']  = set_value('desc');
                    $data['query'] = $this->MBrand->getAll(); //get data from database
                    $data['main']  =  'brand/input';
                    $this->blade->render('template',$data);
                }else{
                    if ($this->input->post('id')>0){
                        $this->MBrand->update();
                        redirect('brand');
                    }else{
                        $this->MBrand->save();
                        redirect('brand');
                    }
                }
            }
        }
    }
    
    function delete(){
        $id = $this->input->post('id');
        $this->db->delete('brands',array('id'=>$id));
    }
    
}
