// helper function get a whole day of the week
function getWeekDays(locale) {
  let baseDate = new Date(Date.UTC(2017, 0, 2)); // just a Monday
  let weekDays = [];
  //   add element into an array
  for (i = 0; i < 7; i++) {
    weekDays.push(
      baseDate.toLocaleDateString(locale, {
        weekday: "long",
      })
    );
    baseDate.setDate(baseDate.getDate() + 1);
  }
  return weekDays;
}

function checkDay(id) {
  let element = document.getElementById("selectedDay");
  element.innerText = " "; // clear selected text every click
  let weekDays = getWeekDays("en-US");
  let day = weekDays[id - 1]; // id start from 1, but weekDays index start from 0
  element.innerText = day;
  // remove active class of each click
  Array.from(document.querySelectorAll(".daylist__item")).forEach((el) =>
    el.classList.remove("daylist--selected")
  );
  // add active class into an element
  let selected = document.getElementById("list" + id);
  selected.classList.add("daylist--selected");
}
