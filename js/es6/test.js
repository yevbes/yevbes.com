/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
'use strict';


let java = "local";

// Class creation
class Document {
    constructor(title, author, publisher) {
        this.title = title;
        this.author = author;
        this.publisher = publisher;
    }

    publish() {
        this.publisher = true;
    }
}

class Book extends Document {
    constructor(title, author, topic) {
        super(title, author, true);
        this.topic = topic;
    }
}

//Destructuring es la descomposicion
let a, b, iterateObj;
[a, b,...iterateObj
]
= [1, 2, 3, 4, 5];

//console.log(typeof iterateObj);
for (let i = 0; i < iterateObj.length; i++) {
    // console.log('num: '+iterateObj[i]);
}

let cars = new Array("Saab", "Volvo", "BMW");
//console.log(typeof(cars));

// Template literals
let bar = `lol ${cars}`;
// console.log(bar);

let name = 'Peter';
let surname = 'Griffin';

function sayHello(strings,

...
values
)
{
    console.log(strings[0]);
    console.log(strings[1]);
    console.log(strings[2]);
    console.log(values[0]);
    console.log(values[1]);
}

//sayHello `Hello ${name}, ${surname} `;
for (let i of cars) {
    //console.error(i);
}

//yield pause from inside 

// WeakMap if no object inside, Garbaje collector delete it
let weakMap = new WeakMap();
let key = {userId: 1};
let key2 = {userId: 2};
/*weakMap.set(key,"Uno");
console.log(weakMap.get(key));
console.log(weakMap.size);
console.log(weakMap.delete(key));
console.log(weakMap.size);
weakMap.set(key2,"Dos");
console.log(weakMap.get(key));
console.log(weakMap.size);*/


 