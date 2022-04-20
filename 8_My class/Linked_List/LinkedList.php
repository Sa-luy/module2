<?php
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
    function totalNodes(): int
    {
        return $this->count;
    }
    function readList(): array
    {
        $listData = [];
        $curent = $this->firstNode;
        while (!is_null($curent)) {
            array_push($listData, $curent->readNode());
            $curent = $curent->next;
        }
        return   $listData;
    }
    function getData()
    {
    }
}