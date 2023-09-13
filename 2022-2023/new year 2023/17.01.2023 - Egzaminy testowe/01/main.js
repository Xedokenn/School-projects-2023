const
    areaInput = document.querySelector("input"),
    output = document.querySelector(".output");

document.querySelector("button").addEventListener("click", () => {
    const area = +areaInput.value;
    const cans = Math.ceil(area / 4);

    output.innerHTML = `Liczba potrzebnych puszek: ${cans}`;
})
