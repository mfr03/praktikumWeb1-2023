var isPraktikan = prompt("Apakah anda praktikan? (iya|tidak)");

if(isPraktikan.toLowerCase() == "iya")
{
    var nama = prompt("Tuliskan nama Anda");
    var nim = prompt("Tuliskan NIM anda");
    var angkatan = prompt("Tuliskan tahun angkatan anda");
    document.write('<table style="border: 1px solid black;"><tr><th>' + nama + '</th><th>' + nim+'</th><th>' + angkatan + '</th></tr></table>');
} 

else if (isPraktikan.toLocaleLowerCase == "tidak")
{
    document.write("Anda bukan praktikan PPW1, anda tidak boleh masuk! ")
}