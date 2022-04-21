<?php
class ListNode
{
    public $data;
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        // $this->next = $next;
    }
    function readNode(){
        return $this->data;
    }
}
class LinkList
{
    public $firstNode;
    private $LastNode;
    private $count;
    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }
    public function insert($data, $key)  
      {        if ($key == 0) {            
          $this->insertFist($data);        } 
          else {            
              $link = new Node($data);            
              $current = $this->firstNode;            
              $previous = $this->firstNode;
        for ($i = 0; $i < $key; $i++) {                
            $previous = $current;                
            $current = $current->next;            
        }           
             $link->next = $current;           
              $previous->next = $link;           
               $this->count++;        
            }  
          }
    function insertFist($data): void
    {
        $node = new Node($data);  //tạo node mới
        $node->next = $this->firstNode;  // thuoc tinh next=TT fist node
        $this->firstNode = $node;

        // thuooc tinh fist node= doi tuwuong vua tao{đưa dât vào đầu nút}
        if (is_null($this->lastNode)) { // kiem tradanh sach da ton tai node thi khoi tao node moi
            $this->lastNode = $node;  // TT last node la node moi khoi tạo{node vua tao la node cuối cùng của danh sách}
        }
        $this->count++;
    }
    function insertLast($data)
    {
        if (!(is_null($this->firstNode))) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFist($data);
        }
    }
    function  remove($index)
    {
        if($index<$this->count){
        $curentNode=$this->firstNode;
            while($curentNode !==null){
                if($curentNode->data === $index)
                $curentNode=$curentNode->next; 

            }
        }
    }
 
    function readList(): array
    {
        $listData = [];
        $curentNode = $this->firstNode;
        while (!is_null($curentNode)) {
            array_push($listData, $curentNode->readNode());
            $curentNode = $curentNode->next;
        }
        return   $listData;
    }
    function get($index)
    {
        if ($index<$this->count) {
                $curentNode = $this->_firstNode;
                $indexNode=0;
          while ($curentNode !== null) {
                 if ($indexNode === $index) {
                    $indexNode->_firstNode = $this->_firstNode->next;
                }
                    $curentNode = $curentNode->next;
                    $indexNode++;
             }
        }
            
    }
    function size()
    {
        return $this->count;
    }
    function clone()
    {
        
    }
    function contains()
    {

    }
    function indexOf()
    {
        
    }
}