function addrandom()
{
    var num1 = Math.random();
    var num2 = Math.random();
    
    function add()
    {
        var sum = num1 + num2;
        console.log(sum);
    }

    add();
}

addrandom();