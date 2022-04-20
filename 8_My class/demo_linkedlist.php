<?php
class ListNode
{
    public $data;  // dữ liệu của note
    public $next;  // tham chiếu den note tiep theo
    function __construct($data)
    {
        $this->data = $data;
        // $this->next = $next;
    }
}
class LinkedList   // lớp linkedlist
{
    private  $_firstNode = null;// nút đầu=rỗng
    private int $_totalNodes = 0;

    public function insert(string $data = null): bool  // them phan tu vao cuoi líkedlist
    {
        $newNode = new ListNode($data); // tao doi tương new node tu lop list node

        if ($this->_firstNode === null) {   // nếu1 node của doi tuong la rỗng
            $this->_firstNode = &$newNode;//thì node dầu tham chiếu đến doi tuong vừa tạo{tạo 1 node dau trong doi tuong}
        } else { //thì 1
            $currentNode = $this->_firstNode;// tạo note hiện hành=doi tuong->físt node(đưa)
            while ($currentNode->next !== null) { //  trong khithuoc tinh nex cua doi tuong vừa tạo k rỗng
                $currentNode = $currentNode->next; //node hiện hành=thuộc tinh next cua node
            }
            $currentNode->next = $newNode; // đưa doi tuongj vưa tạo vao thuộc tinh next đã tham chiếu(tạo note mới)
        }
        $this->_totalNodes++;
        return TRUE;
    }

    public function display()
    {
        echo "Total book titles: " . $this->_totalNodes . "\n";
        $currentNode = $this->_firstNode;
        while ($currentNode !== null) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }
    public function search(string $data = null): bool // tim kiesm phan tu trong linked list
    {
        if ($this->_totalNodes) {
            $currentNode = $this->_firstNode;
            while ($currentNode !== null) {
                if ($currentNode->data === $data) {
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
        }
        return false;
    }
}
$BookTitles = new LinkedList();
$BookTitles->insert("mot");
$BookTitles->insert("Hai");
$BookTitles->insert("Ba");
$BookTitles->display();