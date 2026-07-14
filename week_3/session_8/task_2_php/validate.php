<?php

$first_validates=[
    'email'=>[
        'filter'=> FILTER_VALIDATE_EMAIL,
        'error'=>'enter vaild email'
    ],
   'password'=>[
        'filter' => FILTER_VALIDATE_REGEXP ,
        'my_options' => ['options'=> ['regexp'=> '/^[a-z0-9]{3,8}$/'] ],
        'error' => 'enter valid password'

],
];






$validates = [

'username'=>[
'filter' => FILTER_VALIDATE_REGEXP ,
'my_options' => ['options'=> ['regexp'=> '/^[a-zA-Z0-9_]{3,20}$/'] ],
'error' => 'enter valid username ',

],



'password'=>[
'filter' => FILTER_VALIDATE_REGEXP ,
'my_options' => ['options'=> ['regexp'=> '/^\d{6,}$/'] ],
'error' => 'enter valid password',
],



'email'=>[
'filter' => FILTER_VALIDATE_EMAIL ,
'error' => 'enter valid email',

],

'phone'=>[
'filter' => FILTER_VALIDATE_REGEXP ,
'my_options' => ['options'=> ['regexp'=> '/^(02)?01[0125][0-9]{8}$/'] ],
'error' => 'enter valid phone',

],


'facebook'=>[
'filter' =>  FILTER_VALIDATE_URL ,
'my_options' => ['options'=> ['regexp'=> '/^https?:\/\/(www\.)?facebook\.com\/.+$/i'] ],
'error' => 'enter valid facebook url',

],




'twitter'=>[
'filter' =>  FILTER_VALIDATE_URL ,
'my_options' => ['options'=> ['regexp'=> '/^https?:\/\/(www\.)?(twitter\.com|x\.com)\/.+$/i'] ],
'error' => 'enter valid twitter url',

],

'instagram'=>[
'filter' =>  FILTER_VALIDATE_URL ,
'my_options' => ['options'=> ['regexp'=> '/^https?:\/\/(www\.)?instagram\.com\/.+$/i'] ],
'error' => 'enter valid instagram url'

],

];


?>








