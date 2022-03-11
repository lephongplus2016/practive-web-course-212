document.write("HELLO PHONG LE");

let heading = document.getElementById("heading");

// chú ý heading là 1 node kiểu element, chứ không phải là 1 dòng code
// console.log({
//     element: heading,
// });

let heading2 = document.getElementsByClassName("heading2");

// console.log(heading2);
// getElementsByClassName không trả trực tiếp về 1 element,
// mà trả về 1 HTMLCollection, là mảng các element thỏa classname

let heading3 = document.getElementsByTagName("h1");

// console.log(heading3);

// SỬ DỤNG CSS SELECTOR
console.log(document.querySelector(".box .child"));
// querySelector chỉ trả về 1 element thôi
// nếu muốn trả về 1 array thì sử dụng querySelecorAll
// -> trả về NodeList
