const A = {}; // object
const B = []; // array

A.color = 'skyblue'; // add
B.push('crimson'); // add

const prop = 'size';
A[prop] = 'BIG'; // add variable property 


const C = [...B]; // array copy
const D = [...B, 'pink']; // array copy + new element
const F = ['pink', ...B]; // array copy + new start element 

const E = {...A }; // object copy
const G = {...A, age: 33 } // object copy + new prop
const K = {...G, size: 'small' } // object copy + overwrite prop

const { color, size } = K; // object destruct
const [row1, row2] = F; // array destruct

// console.log(A);
// console.log(B);
// console.log(C);
// console.log(D);
// console.log(F);
// console.log(E);
// console.log(G);
// console.log(K);
// console.log(color, size);
// console.log(row1, row2);


// console.log('%c START ', 'background:skyblue;color:white;');

// declaration "fun" is the name
function fun(bg = 'orange', fs = 30) { // => bg parameter
    console.log('%c FUN ', `background:${bg};color:white;font-size:${fs}px;`);
    return 'was fun';
}

// console.log('%c END ', 'background:skyblue;color:white;');


const moreFun = fun;
// moreFun('pink', 5); // => 'pink' argument
// moreFun('black', 50);

// const how = fun();
// how();

// declaration "fun2" is variable, function has no name
const fun2 = function(bg = 'orange', fs = 30) {
    console.log('%c FUN ', `background:${bg};color:white;font-size:${fs}px;`);
    return 'was fun';
}

const fun3 = (bg = 'orange', fs = 30) => {
    console.log('%c FUN ', `background:${bg};color:white;font-size:${fs}px;`);
    return 'was fun';
}

const fun4 = (a) => {
    return 'was ' + a;
}

const fun5 = a => 'was ' + a;

const what = fun5('fun');


// console.log(what, fun5('cool'));

const calc = (what, a, b) => what(a, b); // what is callback

const sum = (a, b) => a + b;
const mult = (a, b) => a * b;

// console.log('+', calc(sum, 5, 7));
// console.log('*', calc(mult, 5, 7));


const animals = [
    'racoon',
    'beaver',
    'fox',
    'wolf'
];

const colors = [
    'crimson',
    'skyblue',
    'black',
    'pink'
];



// for (let i = 0; i < animals.length; i++) {
//     console.log(`%c ${animals[i]} `, 'background:brown;color:white;');
// }

// for (let i = 0; i < colors.length; i++) {
//     console.log('%c  ', `background:${colors[i]};`);
// }

const arrayGo = (array, fun) => {
    for (let i = 0; i < array.length; i++) {
        fun(array[i]);
    }
}


const print1 = p => console.log(`%c ${p} `, 'background:brown;color:white;');
const print2 = p => console.log('%c  ', `background:${p};`);


// arrayGo(animals, print1);
// arrayGo(colors, print2);
// arrayGo(colors, print1);

// animals.forEach(animal => print1(animal));

// colors.forEach((_, i) => console.log(i));

const animals2 = [];

animals.forEach(a => animals2.push(a + '***'));


const animals3 = animals.map(a => a + '***');


const animalColors = [
    { name: 'racoon', color: 'crimson', size: 12 },
    { name: 'wolf', color: 'pink', size: 42 },
    { name: 'beaver', color: 'skyblue', size: 15 },
    { name: 'fox', color: 'crimson', size: 20 }

];


const animalColorsPlus = animalColors.map(a => ({...a, name: a.name + '+++' }));
const animalColorsPlusCrimson = animalColorsPlus.map(a => a.color == 'crimson' ? {...a, name: '+++' + a.name } : {...a });



const animalsCrimson = animalColors.filter(a => a.color == 'crimson'); // filter

const animalsWoFox = animalColors.filter(a => a.name != 'fox'); // delete


const wolfFilter = animalColors.filter(a => a.name == 'wolf');
const wolfFind = animalColors.find(a => a.name == 'wolf');

const doubleAnimal = animalColors.filter(a => a.color == 'crimson').map(a => ({...a, color: 'black' }));


// animalColors.sort((a, b) => {
//     if (a.size < b.size) return -1;
//     if (a.size > b.size) return 1;
//     return 0;
// });

animalColors.sort((a, b) => a - b);

animalColors.sort((a, b) => b.name.localeCompare(a.name));

console.log(animalColors);