// 普通に書く関数
// function hello(name = 'Tom') {
//     console.log('hello ' + name);
// }


// 無名関数
// const hello = function (name = 'Tom') {
//     console.log('hello ' + name);
// }


// アロー関数
// const hello = (name = 'Tom') => console.log('hello ' + name);

// デフォルト値がない場合
const hello = name => console.log('hello ' + name);


hello('Code Mafia');

hello();


const hello2 = (name, age) => console.log('hello ' + name + age);

hello2('nyan', 5);


const hello3 = (name, age) => {
    console.log('hello ' + name + age);
    console.log('hello ' + name + age);
}

hello3('nyago', 7);



const array = [1, 2, 3, 4, 5, 6];

array.forEach (value => console.log(value));

// こう書くのと一緒
// array.forEach(function(value) {
//     console.log(value);
// })


