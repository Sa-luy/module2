<?php
class Node
{
    public $next;
    public int $score;
    public string $name;
    function __construct($name,$score)
    {
        $this->score=$score;
        $this->name=$name;
        $this->next=null;
    }
    function readNode(){
        $infor=['name'=>$this->name,'score'=>$this->score];
        return $infor;
    }
    function getscore(){
        return $this->score;

    }
    function getname(){
        return $this->name;
    }
}
class LinkedList
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
    function insertFist($name,$score): void
    {
        $node = new Node($name,$score); 
        $node->next = $this->firstNode; 
        $this->firstNode = $node;
        if (is_null($this->lastNode)) {
            $this->lastNode = $node; 
        }
    }
    function insertLast($name,$score)
    {
        if (!(is_null($this->firstNode))) {
            $node = new Node($name,$score);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFist($name,$score);
        }
    }
    function showList()
    {
        $listData = [];
        $curent = $this->firstNode;
        while (!is_null($curent)) {
            array_push($listData, $curent->readNode());
            $curent = $curent->next;
        }
        return   $listData;
    }
    function totalStudentsFail()
    {
        $count=0;
        $curent = $this->firstNode;
        while (!is_null($curent)){
            if( $curent->getscore()<=5){
                return $curent;
                $count++;
            }
            $curent = $curent->next;
        }
    }
    function FindCrossingPoint($score)
    {
        $curentNode = $this->firstNode;
        while (!is_null($curentNode)){
            if($curentNode->getscore()==$score) {
               return $curentNode-> readNode();
                ;
             }
        }
    }
    function listStudentMaxScore(){
        $max=0;
        $curent = $this->firstNode;
        while (!is_null($curent)){
            if( $curent->getscore()>$max){
                $max= $curent->getscore();
            }
        }
        $this->FindCrossingPoint($max);
    }
    function findByName($name)
    {
        $curentNode = $this->firstNode;
        while (!is_null($curentNode)){
            if($curentNode->getname()==$name){
               return $curentNode-> readNode();
            }
            }
    }
    
}
$object1=new LinkedList();
$object1->insertFist('hai',8);
$object1->insertFist('lan',2);
$object1->insertFist('hai',4);
$object1->insertFist('hai',9);
$object1->insertFist('hai',6);
$object1->insertFist('hai',3);
$object1->insertFist('hai',1);
$object1->insertFist('hai',0);
$object1->insertFist('hai',7);
$object1->insertFist('hai',8);
$object1->insertFist('hai',8);
$object1->insertFist('hai',9);
echo '<pre>';
print_r($object1);
echo '\\\\\\\\\\\\\\\\\\\\';
echo '<pre>';
print_r($object1->totalStudentsFail());


?>