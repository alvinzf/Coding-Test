function findMinMax(arr, m) {
  let n = arr.length;
  let min_sum = 0;
  let max_sum = 0;

  arr.sort(function (a, b) {
    return a - b;
  });

  for (let i = 0, j = n - 1; i < m; i++, j--) {
    min_sum += arr[i];
    max_sum += arr[j];
  }

  console.log("Min value: " + min_sum + " " + "Max Value: " + max_sum + " ");
}

let arr_a = [1, 2, 3, 4, 5];
let arr_b = [2, 4, 6, 8, 10];
findMinMax(arr_a, 4);
findMinMax(arr_b, 3);
