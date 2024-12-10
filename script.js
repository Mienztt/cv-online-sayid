function addMatrices() {
  const a = getMatrix("a");
  const b = getMatrix("b");

  const result = [
    [a[0][0] + b[0][0], a[0][1] + b[0][1]],
    [a[1][0] + b[1][0], a[1][1] + b[1][1]],
  ];

  displayResult(result);
}

function subtractMatrices() {
  const a = getMatrix("a");
  const b = getMatrix("b");

  const result = [
    [a[0][0] - b[0][0], a[0][1] - b[0][1]],
    [a[1][0] - b[1][0], a[1][1] - b[1][1]],
  ];

  displayResult(result);
}

function multiplyMatrices() {
  const a = getMatrix("a");
  const b = getMatrix("b");

  const result = [
    [
      a[0][0] * b[0][0] + a[0][1] * b[1][0],
      a[0][0] * b[0][1] + a[0][1] * b[1][1],
    ],
    [
      a[1][0] * b[0][0] + a[1][1] * b[1][0],
      a[1][0] * b[0][1] + a[1][1] * b[1][1],
    ],
  ];

  displayResult(result);
}

function calculateDeterminant() {
  const a = getMatrix("a");
  const determinant = a[0][0] * a[1][1] - a[0][1] * a[1][0];
  document.getElementById("output").innerText = `Determinant A: ${determinant}`;
}

function clearMatrix() {
  ["a11", "a12", "a21", "a22", "b11", "b12", "b21", "b22"].forEach((id) => {
    document.getElementById(id).value = "";
  });
  document.getElementById("output").innerText = "-";
}

function getMatrix(prefix) {
  return [
    [
      parseFloat(document.getElementById(`${prefix}11`).value) || 0,
      parseFloat(document.getElementById(`${prefix}12`).value) || 0,
    ],
    [
      parseFloat(document.getElementById(`${prefix}21`).value) || 0,
      parseFloat(document.getElementById(`${prefix}22`).value) || 0,
    ],
  ];
}

function displayResult(matrix) {
  document.getElementById(
    "output"
  ).innerText = `Result:\n[${matrix[0][0]}, ${matrix[0][1]}]\n[${matrix[1][0]}, ${matrix[1][1]}]`;
}
