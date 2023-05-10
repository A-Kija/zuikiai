let racoon1 = 'good';
const racoon2 = 'bad';

const racoon3 = {
    what: 'good',
    size: 'small'
}

const racoon4 = {
    what: 'bad',
    size: 'big'
}

// console.log(racoon3 == racoon4);

let fox1 = racoon1; // by value
racoon1 = 'bad';

let fox3 = racoon3; // by reference
// racoon3.what = 'evil';
// fox3.size = '200px';

// console.log(racoon3 == fox3);

let fox4 = {...racoon3, ...racoon4 } // spraed copy
    // racoon4.what = 'evil';
    // fox4.size = '200px';

// console.log('fox:', fox1, 'racoon:', racoon1);
// console.log('fox:', fox3, 'racoon:', racoon3);
// console.log('fox:', fox4, 'racoon:', racoon4);

// console.log(racoon3, racoon4);

/*
const what = racoon3.what;
const size = racoon3.size;
*/

const { what, size } = racoon3; // destructuring 

// console.log(what, size);

const home = [
    'Ieva',
    'Simas',
    'Beaver'
];

home.push('Petras');
home.unshift('Margė');
// home.pop();
// home.shift();

home[1] = 'Fox';

// home[55] = 'Simas';


console.log(home, home[1], home.length);


for (let i = 0; i < home.length; i++) {
    // console.log(home[i]);
}

function rand(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);
}

let h = 0;

do {
    const now = rand(0, 1) ? 'H' : 'S';
    now == 'H' && h++;
    // console.log('%c' + now, 'color:pink;');

} while (h < 3);


let bolt = 0;
const grandpa = rand(0, 600);
bolt = grandpa;
console.log('%c' + bolt, 'color:orange;');
while (bolt < 400) {
    const nightOut = rand(10, 60);
    bolt += nightOut;
    // console.log('%c' + bolt, 'color:crimson;');
}

/*
< ---- >=
> ---- <=
== --- !=
&& --- ||
*/


let A = 2;

console.log(A++ * ++A);
// 2 * 4


let a = 1;

if (a-- && a) {
    // console.log('%cJa ja', 'color:skyblue;');
} else {
    // console.log('%cNo no', 'color:yellow;');
}


let b = 0;

b > 5 ?
    console.log('%cJa ja > 5', 'color:skyblue;') :
    b > 2 ?
    console.log('%cJa ja > 2', 'color:skyblue;') :
    console.log('%cNo no', 'color:yellow;');


let C = 0;

console.log(C-- || C-- || C-- || C-- || C-- || C--); // 1 true

let D = 23;

console.log(D-- && D-- && D-- && D-- && D-- && D--); //1 false