<?php 
$config=[
       
         'admin_login'=>   [
                         [
                           'field' => 'email',
                           'label' => 'Email',
                           'rules' => 'valid_email|required'
                         ],
                         [
                           'field' => 'password',
                           'label' => 'Password',
                           'rules' => 'required'
                         ]
                      ],

         'course'=>   [
                         [
                           'field' => 'course',
                           'label' => 'Course',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'fees',
                           'label' => 'Fees',
                           'rules' => 'required'
                         ],[
                           'field' => 'duration',
                           'label' => 'Duration',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'branch_id',
                           'label' => 'Branch',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'medium',
                           'label' => 'Medium',
                           'rules' => 'required'
                         ]
                      ],


          
         'branch'=>   [
                         [
                           'field' => 'branch',
                           'label' => 'Branch',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'city',
                           'label' => 'City',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'branch_address',
                           'label' => 'Branch Address',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'branch_email',
                           'label' => 'Branch Email',
                           'rules' => 'valid_email|required'
                         ],
                         [
                           'field' => 'branch_mobile',
                           'label' => 'Branch Mobile',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'incharge_name',
                           'label' => 'Incharge Name',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'incharge_mobile',
                           'label' => 'Incharge Mobile',
                           'rules' => 'required'
                         ]
                         
                      ],            

          'admission'=>   [
                         [
                           'field' => 'name',
                           'label' => 'Name',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'parents_name',
                           'label' => 'parent Name',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'mobile',
                           'label' => 'Mobile',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'email',
                           'label' => 'Email',
                           'rules' => 'valid_email|required'
                         ],
                         [
                           'field' => 'address',
                           'label' => 'Adress',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'parents_mobile',
                           'label' => 'parent Mobile',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'postal_code',
                           'label' => 'PIN Code',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'DOB',
                           'label' => 'Date Of Barth',
                           'rules' => 'required'
                         ],
                         [
                           'field' => 'course',
                           'label' => 'Course',
                           'rules' => 'required'
                         ]
                    

                      ]            
    



            ];









?>