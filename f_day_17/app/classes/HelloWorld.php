<?php
  namespace App\classes;


class HelloWorld
{
  public $message;
  public $x;
  public $y;
  public $z;
  public $check;
  public $data = [];
    public function __construct()
    {
      $this->message= "Hello World";
      $this->x = 10;
      $this->y = 20;
      $this->z = 30;
      $this->check = false;
    }
    public function index()
    {
      // echo ($this->x < $this->y) && ($this->y < $this->z);
      // echo '<br/>';
      // echo ($this->x > $this->y) && ($this->y > $this->z);
      // echo '<br/>';
      // echo ($this->x < $this->y) && ($this->y > $this->z);
      // echo '<br/>';
      // echo ($this->x > $this->y) && ($this->y < $this->z);
      // echo '<br/>';
      
      // echo ($this->x < $this->y) || ($this->y < $this->z);
      // echo '<br/>';
      // echo ($this->x > $this->y) || ($this->y > $this->z);
      // echo '<br/>';
      // echo ($this->x < $this->y) || ($this->y > $this->z);
      // echo '<br/>';
      // echo ($this->x > $this->y) || ($this->y < $this->z);
      // echo '<br/>';

      // echo !$this->check;

                                                   // Statements //

                                            // Single Line Statements //
    
    // $this->x=100;
    // echo $this->x;


                                        // Conditional Statements //
    
    // $this->x=100;
    // $this->y=200;
    // $this->z= $this->x + $this->y;
    // if($this->x < $this->y)
    // {
    //   echo $this->z;
    // }

    // $this->x=10;
    // $this->y=200;
    // $this->z= $this->x + $this->y;
    
    // if($this->x > $this->y)
    // {
    //   echo $this->z;
    // }
    // else 
    // {
    //   echo "Hello BD";
    // }


    // if($this->x > $this->y)
    // {
    //   echo $this->z;
    // }
    // elseif($this->y < $this->z) 
    // {
    //   echo "Hello Dhaka";
    // }
    // elseif($this->z > $this->x) 
    // {
    //   echo "Hello BD";
    // }
    // else
    // {
    //   echo "Hello PHP";
    // }


                                              // Switch Statements //

                // switch($this->x)
                // {
                //   case 10:
                //     echo "Hello World";
                //     break;
                //   case 20:
                //     echo "Hello BD";
                //     break;
                //   case 30:
                //     echo "Hello Dhaka";
                //     break;
                //   default:
                //     echo "Hello Bitm";
                //     break;
                // }

                                          // Repeated Statements //
                                      // for, while, do while, foreach
    
      // $this->x=30;
      // $this->y=200;
      // $this->z= $this->x + $this->y;
      
    
      // for($this->x; $this->x >= 11; $this->x--)
      // {
      //   if($this->x == 15)
      //   {
      //     break;
      //   }
      //   echo $this->x . "<br/>";
      // }


      // while ($this-> x < 50)
      // {
      //   echo $this-> x . ' ';
      //   $this->x++;
      // }

        // do
        // {
        //   echo $this-> x . " ";
        //   $this->x++;
        // } while ($this-> x < 50);

                                                // Arrays //

      // $this-> data = [100, 200, 300, "BITM", "SEIP", true, false, 50.20];

      // // echo $this->data[7];

      // foreach($this->data as $item)
      // {
      //   echo $item . ' ';
      // }

    //   $this-> data = [
    //             'name'    => 'Name', 
    //             'email'   => 'name@email.com', 
    //             'mobile'  => '01234567891'     
    // ];


                      //Here in array, $this-> data = [ 'index' => (array odject) 'value' ]
      
      // echo $this->data['mobile'];

      // foreach($this->data as $item)
      // {
      //   echo $item . '<br/>';
      // }

      // foreach($this->data as $index=> $item)
      // {
      //   echo "index : " . $index . "<br/>" . "Value : " . $item . '<br/>';
      // }

                                // Multidimentional Array
      // $this-> data = [
      //   0 => [
      //         'name'    => 'Name', 
      //         'email'   => 'name@email.com', 
      //         'mobile'  => '01234567891'
      //         ],
      //   1 => [
      //         'name'    => 'Name2', 
      //         'email'   => 'name2@email.com', 
      //         'mobile'  => '01336667198'
      //         ],
      //   2 => [
      //         'name'    => 'Name3', 
      //         'email'   => 'name3@email.com', 
      //         'mobile'  => '01436667198'
      //         ]
      //             ];

        // echo $this -> data[1]['name']; 

        // foreach ($this->data as $item)
        // {
        //   echo $item['name'] .' ' . $item['email'] .' ' . $item['mobile'] .' ' . '<br/>';
        // }

        // foreach ($this->data as $item)
        // {
          

        //   foreach ($item as $value)
        //   {
        //     echo $value . ' ';
        //   }

        //   echo  '<br/>';

        // }


        $this-> data = [
          0 => [
                'name'    => 'Name', 
                'email'   => 'name@email.com', 
                'mobile'  => [
                    'personal' => '01234567891',
                    'guardian' => '01234569791'
                ]
                ],
          1 => [
                'name'    => 'Name2', 
                'email'   => 'name2@email.com', 
                'mobile'  => [
                  'personal' => '01336667198',
                  'guardian' => '01336967198'
              ]
                ],
          2 => [
                'name'    => 'Name3', 
                'email'   => 'name3@email.com', 
                'mobile'  => [
                  'personal' => '01436667198',
                  'guardian' => '01436967198'
              ]
                ]
                    ];

foreach($this->data as $item)
{
  foreach ($this->item as $value)
  {

      if(is_array($value))
      {
        foreach ($value as $v_item)
        {
          echo $v_item . ' ';
          echo  '<br/>';
        }
    }
    else
    {
      echo $value;
    }
      echo  '<br/>';
  }

}



      }

}




?>