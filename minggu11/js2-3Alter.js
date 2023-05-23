var displayNumber = 0;
var isPlus = true;
var isMinus = false;

function makeNumber()
{
    for(let i = 0; i < 10; i++)
    {
        var temp = document.createElement("button");
        temp.style = "margin: 10px 5px 0px 0px";
        temp.innerText = i;
        temp.addEventListener("click", function(){addNumber(parseInt(i))});
        document.getElementById("numbers").appendChild(temp);
    }
}

function addNumber(i)
{
    if(isPlus)
    {
        displayNumber += i;
    }
    else if (isMinus)
    {
        displayNumber -= i;
    }
    console.log(i);
    // document.write("<p>" + i + "</p>")
}

function changeOperationsToMinus()
{
    isMinus = true;
    isPlus = false;
}

function changeOperationsToPlus()
{
    isMinus = false;
    isPlus = true;
}


function displayTheNumber()
{
    
    var res = document.getElementById("result");
    res.innerHTML = "<p>" + displayNumber + "</p>";
}

makeNumber();