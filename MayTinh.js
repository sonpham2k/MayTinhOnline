// let name = 'Son';
// let name2 = 'Pham';
// let name3 = 30;
// let name4 = 0.3;
// let name5 = name3 + name4;
// const kami = 1;
// let QA = true;
// console.log(name,name2);
// console.log(name,name3);
// console.log(name,name4);
// console.log(name,name5);

// let Son = {
//     name: 'Son',
//     age:'21',
//     address:'Hung Yen'
// }

// let array = [
//     2,
//     0,
//     1
// ]

// let a, b;
// function ok(a, b){
//     let c = a + b;
//     console.log(c);
// }
let a, b, c, i, x , y, z, m;
let d = '';
let array;

function button(a){
    document.querySelector('.input').value += a;
}

function button1(){
    document.querySelector('.input').value = '';
}

function button2(){
    array = document.querySelector('.input').value;

    document.querySelector('.input').value = array.substring(0, array.length-1);
}

function equal() {
    array = document.querySelector('.input').value;

    for(let i=0; i <= array.length; i++){
        if(array[i] == '+'){
            x = new Number(array.substring(0,i));
            y = new Number(array.substring(i+1, array.length));
            z = x + y;
            return  document.querySelector('.input').value = z;
        }
        if(array[i] == '-'){
            x = new Number(array.substring(0,i));
            y = new Number(array.substring(i+1, array.length));
            z = x - y;
            return  document.querySelector('.input').value = z;
        }
        if(array[i] == 'x'){
            x = new Number(array.substring(0,i));
            y = new Number(array.substring(i+1, array.length));
            z = x * y;
            return  document.querySelector('.input').value = z;
        }
        if(array[i] == ':'){
            x = new Number(array.substring(0,i));
            y = new Number(array.substring(i+1, array.length));
            z = x / y;
            return  document.querySelector('.input').value = z;
        }
        if(array[i] == '%'){
            x = new Number(array.substring(0,i));
            y = 100;
            z = x / y;
            return  document.querySelector('.input').value = z;
        }
    }   

}

