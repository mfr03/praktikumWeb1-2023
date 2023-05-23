var displayNumber = 0;

function makeNumber()
{
    for(let i = 0; i < 10; i++)
    {
        var temp = document.createElement("button");
        temp.innerText = i;
        temp.addEventListener("click", function(){addNumber(parseInt(i))});
        document.body.appendChild(temp);
    }
}

function addNumber(i)
{;
    displayNumber += i;
    console.log(i);
    // document.write("<p>" + i + "</p>")
}

function displayTheNumber()
{
    
    var res = document.getElementById("result");
    res.innerHTML = "<p>" + displayNumber + "</p>";
}


