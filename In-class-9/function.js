const names = [

    "I love Chicken",
    "I love Oreo",
    "I love Beef",
    "I love pinecone"

];

function findpinecone(string)
{
    return string.includes("pinecone")
}
    
const words = names.filter(findpinecone);
console.log(words); 