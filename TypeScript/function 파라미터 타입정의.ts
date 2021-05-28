// typescript로 정의 하는 방법
function sum(a: number, b: number): number {
  return a + b;
}

let result = sum(10, 20)
result.toLocaleString();

// ts-check와 javsacript doc 으로 정의하는 방법 (.js파일도 가능)
//@ts-check
/**
 * @param {number} a 첫번째 숫자
 * @param {number} a 두번째 숫자
 */
function sum1(a, b) {
  return a + b;
}