<?php 

require("./app/Pokemon.php");

//整个specs存在的价值对于大项目来说非常重要，这并不是一个简单的debug，首先，他是监视各个app之间的关联的利器，如果有一个app改动，但是他的数据又有被另外一个app应用的话，如果不改另外一个app，表面上看起来没有问题但是会出现很难找的错误；其次，如果你在refactor改善你的代码的时候，中断了一会回来，无法找到修改的地方，这个东西可以给你很好的提示；最后，xx.spec.php可以当作一个小小的documentation来审视你自己的代码。更加明白你app里面的各种function的作用。

describe("Pokemon",function(){
   describe("->Hello",function(){
       // it是一个检测的语句，前面是要检测的内容的陈述
        it("return Hello",function(){
        //arrange
        $pokemon = new Pokemon("Pikachu","pikapika");
    
        //act
        $message = $pokemon->hello();
    
        //assert
    
        expect($message)->to->equal('Hello');
        });
    });

    
    describe("->isConnected()",function(){
    
        it("is connected",function(){
            //arrange
            $pokemon = new Pokemon("Pikachu","pikapika");
        
            //act
            $check = $pokemon->isConnected();
        
            //assert
        
            expect($check)->to->equal(true);
        });

        it("the pseudo is not correct",function(){
            //arrange
            $pokemon = new Pokemon("error","pikapika");
        
            //act
            $check = $pokemon->isConnected();
        
            //assert
        
            expect($check)->to->equal(false);
        });

        it("the password is not correct",function(){
            //arrange
            $pokemon = new Pokemon("Pikachu","error");
        
            //act
            $check = $pokemon->isConnected();
        
            //assert
        
            expect($check)->to->equal(false);
        });

    });
});

