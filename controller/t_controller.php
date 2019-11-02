<?php
$data = array();
    flexible_function($data );  // call function 

    function flexible_function(&$data) 
    {
        $function = "view";  //run first 
        if(isset($_GET['action']))  //get from url
        {
            $function = $_GET['action'];
        }
        $function($data);  //call function
    }
        //end declare function

    function view (&$data)
    {
       $data['view']= m_view();
       $data['page']="test/view.php";
    }
    function add (&$data)
    {
       $data['add']= m_add();
       $data['page']="test/add.php";
    }
    function edit(&$data)
    {
        $data['edit']= m_edit();
        $data['page']="test/edit.php";
    }
    function delete(&$data)
    {
        $data['delete']= m_delete();
        $data['page']="test/delete.php";
    }
?>