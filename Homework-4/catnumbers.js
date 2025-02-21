const cats = [
    {
        name: 'Charlie',
        adoptionStatus: 'available'
    },
    {
        name: 'Lily',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Coco',
        adoptionStatus: 'available'
    },
    {
        name: 'Oreo',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Luna',
        adoptionStatus: 'available'
    },
    {
        name: 'Milo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lola',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Leo',
        adoptionStatus: 'available'
    },
    {
        name: 'Willow',
        adoptionStatus: 'available'
    },
    {
        name: 'Bella',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Max',
        adoptionStatus: 'available'
    },
    {
        name: 'Cleo',
        adoptionStatus: 'available'
    },
    {
        name: 'Lucy',
        adoptionStatus: 'not-available'
    },
    {
        name: 'Daisy',
        adoptionStatus: 'available'
    },
];

//this is a empty array that will be use to put any avaible cats
let result = [];

//loops throught the array to find any cats that have a available adoption status
for (let cat of cats) 
{  
    if (cat.adoptionStatus === 'available') 
    {  
        result.push(cat.name);  
    }
}

console.log(result);  // outputs the avaible cats

let sentence = `I have adopted these wonderful cats: ${result.join(', ')}!`; 

console.log(sentence);

const random = (Math.random() * 10 > 5) ? "greater than five!" : "less than five!"; // a random will be compared to 5 to see if its greater than 5 or less than 5
console.log(random);    //outputs the string 

const cat = {name:"Pinecone", age:13, type:'Munchkin', cuteness: 9001}; 

for(const value in cat) //this will go through the array above and out put the value 
{
    console.log(value)
    console.log(cat[value]);
}

if(1 == '1')    // this will check if the number 1 and string '1' is same, if it is it will output true
{
    console.log(true);
}
if(1 !== '1') // this will check if the number 1 and string '1' is the same, this will output false
{
    console.log(false);
}

const newcat = cats.map(function(cat) // this will create a new array and add the names but also add the " is cute!" to each cat name
{
    return cat.name + " is cute!";
});

console.log(newcat);