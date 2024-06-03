"use strict"

// Fibonacci Series

// function fibonacci(num) {
//     var x = 0;
//     var y = 1;
//     var z;
//     var i = 0;
//     for (i = 2; i < num; i++) {
//       z = x + y;
//       x = y;
//       y = z;
//     }
//     return y;
// } 
// var num = 7;
//  var answer = fibonacci(num);
// console.log("The 7th term of the Fibonacci series is: ", answer);

// // Get the Fibonacci series up to n terms using the while loop

// function fibonacci(num) {
//     var x = 0;
//     var y = 1;
//     var z;
//     var i = 2;
//     while (i < num) {
//       z = x + y;
//       x = y;
//       y = z;
  
//       i = i + 1;
//     }
//     return y;
// }
// var num = 9;
// var answer = fibonacci(num);
// console.log("The 9th term of the Fibonacci series is: ", answer);
  
// Get the Fibonacci series of the first 8 terms

// function fibonacci(num) {
//     // x is representing the first term,
//     // y is representing the second term, and
//     // z is representing the sum of x and y.
//     var answer = [];
//     var x = 0;
//     var y = 1;
//     var z;
  
//     // Since, the first two elements are fixed.
//     // Storing the first two terms.
//     answer.push(x);
//     answer.push(y);
  
//     var i = 2;
//     while (i < num) {
//       z = x + y;
//       x = y;
//       y = z;
  
//       // Storing the current element
//       answer.push(z);
//       i = i + 1;
//     }
//     return answer;
// }
// var num = 8;
// var answer = fibonacci(num);
// console.log("The Fibonacci series is till the 8th term is: ", answer);
  


// function fibonacci(num) {
//     if (num == 1) return 0;
//     if (num == 2) return 1;
//     return fibonacci(num - 1) + fibonacci(num - 2);
// }
// var num = 7;
// var answer = fibonacci(num);
// console.log("The 7th term of the Fibonacci series is: ", answer);
  

// Fibonacci series in reverse order

// function reverseFibonacci(num) {
//     let array = [];
  
//     // Adding the first and second elements
//     array[0] = 0;
//     array[1] = 1;
  
//     for (let i = 2; i < num; i++) {
//       // Storing sum as the current element
//       array[i] = array[i - 2] + array[i - 1];
//     }
  
//     // reversing the array as we want the reversed order.
//     array.reverse();
  
//     return array;
//   }
// var num = 5;
// var answer = reverseFibonacci(num);
// console.log("The Fibonacci series is till 5th term is: ", answer);
  
  

// Recursive Approach (Exponential Time Complexity)

// function fibonacciRecursive(n) {
//     if (n <= 1) 
//         return n;
//     else
//         return fibonacciRecursive(n - 1) + fibonacciRecursive(n - 2);
// }
// console.log(fibonacciRecursive(10)); // Output: 55


// Memoization (Top-Down Dynamic Programming) (Linear Time Complexity)

// function fibonacciMemoization(n, memo = {}) {
//     if (n <= 1) return n;
//     if (memo[n]) return memo[n];
//     memo[n] = fibonacciMemoization(n - 1, memo) + fibonacciMemoization(n - 2, memo);
//     return memo[n];
// }
// console.log(fibonacciMemoization(10)); // Output: 55
