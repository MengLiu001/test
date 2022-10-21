1.local：局部变量； global:全局变量（在引用全局变量时使用该关键字）；static静态变量（每次调用函数时， 该变量将会保留前函数调用的值一次）；parameter：参数作用域（局部变量优先级大于全局变量，在函数内调用全局变量后，重新给全局变量赋值，后面函数调用的全局变量的值也会改变）
2.数据类型： string ，integer,null,float,boolean,array,object,Resource
3.类型比较：==比较值，不比较类型；===比较类型和值；
4.常量定义使用define（）函数，例define（“name”,"张三"，true/false）（该常量为全局变量，常量值被定义后，在脚本的其他任何地方都不能被改变；true/false 为name区不区分大小写-TRUE为不区分）
5.用.将两个字符串进行连接例（$a.$b）;strlen()函数返回字符串的长度；
6.运算符：(1)算术运算符:+,-,*,/,%(模：取余数)，~（取反）； indiv()该函数是向下取整（例intdiv(10,3)结果为3）
                  (2)赋值运算符:x += y等同于x = x + y(其他同理)
                  (3)递增/递减运算符：++ x，x 加 1，然后返回 x；x++,返回 x，然后 x 加 1;(递减同理)
                  (4)比较运算符：x <> y（如果 x 不等于 y，则返回 true）；x !== y不绝对等于（如果 x 不等于 y，或它们类型不相同，则返回 true）
                  (5)逻辑运算符：与（and，&&，如果x和y都为 true，则返回 true）；或（or,||,如果 x 和 y 至少有一个为 true，则返回 true）；
                       异或（xor,如果 x 和 y 有且仅有一个为 true，则返回 true）；非（!，如果x不为true,则返回true）
                  (6)三元运算符：（test1）？（test2）：（test3）(php5.3版本写法（test1）？：（test3）)（对 test1 求值为 TRUE 时的值为 test2，
                       在test1 求值为 FALSE 时的值为 test3）
7.数组：（1）数值数组：例$name=array("张三"，“李四”)；取值：$name[0],$name[1];count($name)(获取数组长度)
              （2）关联数组：例$name=array("name1"=>"张三"，“name2”=>"李四")；取值：$name['name1'],$name['name2'];
                 遍历用foreach($name as  $key=>$value)
                (3)多维数组：
              （4）数组排序；sort（）升序；rsort()降序；ksort()对键升序；krsort()对键降序；asort()对值升序；arsrot()对值降序；
                            