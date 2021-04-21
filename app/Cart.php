<?php

namespace App;



class Cart
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;
    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        } else {
            $this->items = null;
        }
    }

    public function add($item, $id, $quantity,$amount) {
        $storedItem = ['qty' => '0','sqty' => '0', 'perprice'=>0,'price' => 0, 'item' => $item , 'desc' => '','status'=>'','reason'=>''];

        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
                $storedItem['desc'] = $this->items[$id]['desc'];
                $end = substr($storedItem['desc'], -1);
               // $storedItem['desc'] = $end;
            }
            else
            {
                $this->totalQty++;
            }
        }
        else
        {
            $this->totalQty++;
        }
       
        $price = $item['price'];
        $amount = $item['price'];
       // $storedItem['sqty']++ ;
        $storedItem['perprice'] =$price;
        $storedItem['qty'] +=$quantity;
        $sprice = $price *  $quantity;
        $storedItem['amount'] = $amount;
        $storedItem['price'] +=$price *$quantity;
       
        $storedItem['desc'] =   $storedItem['desc'] . $quantity . ' = '. $sprice  .' ₹ ,';
        $storedItem['status'] ="Accepted";
        $storedItem['reason'] ="";
        $this->items[$id] = $storedItem;
       
        $this->totalPrice +=$price *  $quantity;;
    }

   public function deductByOne($id) {
        $this->items[$id]['qty']--;
        
      //  $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;

        $input =$this->items[$id]['desc'];
        $index = strripos($input,","); 

        $text= substr($input, strripos($input, "="), strripos($input, "qty"));
        $text1 = substr($text,0, strripos($text, "₹")); 
        $text3= ltrim($text1,'=');
        $myprice = floatval($text3); 
        if ($index > 0)
        $input = rtrim($input,',');
        $input =substr($input,0, strripos($input,","));
        $this->items[$id]['desc'] =  $input;

       

        $this->items[$id]['price'] -=$myprice;
      
        $this->totalPrice -= $myprice;

        if ($this->items[$id]['sqty'] <= 0) {
            unset($this->items[$id]);
        }
    }


    public function removeItem($id) {
        //$this->totalQty -= $this->items[$id]['sqty'];
        $this->totalQty -= 1;
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

    public function operation($id,$status,$reason) {
        //$this->totalQty -= $this->items[$id]['sqty'];
        $this->items[$id]['status'] =  $status;
        $this->items[$id]['reason'] =  $reason;
    }


}
