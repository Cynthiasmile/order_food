<?php
namespace Admin\Controller;
use Common\Controller\AdminController;
class MerchantController extends AdminController {
	private $Merchant;
    private $Order;
    private $Food;

    /***
     * 初始化构造函数
     */
	function _initialize(){
		$this->Merchant=M('Merchant');
        $this->Order=D('Order');
        $this->Food=M('Food');
	}

    /***
     * 显示商户列表
     */
    public function index(){
    	$merchants=$this->Merchant->select();
    	$this->assign("merchants",$merchants);
    	$this->display();
    }

    /***
     * 显示某商户详细信息
     */
    public function show(){
        if(IS_AJAX) {
            $id=I("post.id");
            $merchant=$this->Merchant->find($id);
            if($merchant){
                $this->success($merchant);
            }else{
                $this->error("查找商户信息失败");
            }
        }
    }

    /***
     * 修改商户修息
     */
    public function update(){
        $this->Merchant->create();
        $this->Merchant->save();
        //$this->success("商户信息修改成功",U('index'));
        $this->success("商户信息修改成功");
    }

    /***
     * 显示某商户的订单列表
     */
    public function order_list(){
        $id=I("get.id");
        $merchant=$this->Merchant->find($id);

        $orders=$this->Order->relation(true)->where("merchant_id=$id")->order("order_time desc")->select();
        foreach($orders as $key => $value){
            $foods=explode(",",$value["food_id"]);
            $name_num=explode(",",$value[num]);
            //dump($foods);
            foreach($foods as $k => $v){
                $food=$this->Food->find($v);
                //$name_mum=explode(":",$v);
                //$food=$this->Food->find($name_mum[0]);
                $food["num"]=$name_num[$k];
                $array[$key][$k]=$food;
            }
            //dump($array[$key]);
            $orders[$key]["foods"]=$array[$key];
        }
        //dump($orders);


        $this->assign("merchant",$merchant);//商户信息
        $this->assign("orders",$orders);//$id商户订单信息
        $this->display();
    }

    public function order_edit(){
        $id=I("get.id");
        $order=$this->Order->relation(true)->find($id);
        $foods=explode(",",$order["food_id"]);
        $name_num=explode(",",$order[num]);
        //dump($foods);
        foreach($foods as $k => $v){
            $food=$this->Food->find($v);
            //$food=$this->Food->find($name_mum[0]);
            $food["num"]=$name_num[$k];
            $food["kind_num"]=$k+1;
            $array[$k]=$food;
        }
        $foodcount=count($array);
        //dump($array[$key]);
        $order["foods"]=$array;

        //商户信息
        $merchant=$this->Merchant->where("id=$order[merchant_id]")->find();

        //该商户所有食品信息
        $allfoods=$this->Food->where("merchant_id=$order[merchant_id]")->select();


        $this->assign("merchant",$merchant);
        $this->assign("foodcount",$foodcount);
        $this->assign("Order",$order);
        $this->assign("allfoods",$allfoods);
        $this->display();

    }
}