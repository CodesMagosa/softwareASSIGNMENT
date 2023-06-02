function openPopup() {
    document.getElementById("popup").style.display = "block";
  }

  function closePopup() {
    document.getElementById("popup").style.display = "none";
  }

  document.getElementById("close").addEventListener("click", closePopup);
//end of new task window
//pop up window
function openPopup() {
    document.getElementById("popup").style.display = "block";
  }

  function closePopup() {
    document.getElementById("popup").style.display = "none";
  }

  document.getElementById("close").addEventListener("click", closePopup);
//end of pop up window

const dropdownBtn = document.querySelector('.dropdown-btn');
const dropdownContent = document.querySelector('.dropdown-content');
const monthSelect = document.querySelector('#month');
const yearSelect = document.querySelector('#year');

dropdownBtn.addEventListener('click', function() {
    dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
});

const currentDate = new Date();
const currentYear = currentDate.getFullYear();
const currentMonth = currentDate.toLocaleString('default', { month: 'long' });

document.querySelector('#year').value = currentYear;
document.querySelector('#month').value = currentMonth;

function updateButtonText() {
    const selectedMonth = monthSelect.options[monthSelect.selectedIndex].text;
    const selectedYear = yearSelect.value;

    dropdownBtn.textContent = selectedMonth + ' ' + selectedYear;
}

monthSelect.addEventListener('change', updateButtonText);
yearSelect.addEventListener('change', updateButtonText);


// Path: Tasker.js

function dateClicked(index) {
  var dateItems = document.getElementsByClassName('date-item');
  for (var i = 0; i < dateItems.length; i++) {
      dateItems[i].classList.remove('active');
  }
  dateItems[index].classList.add('active');

  // Update the content based on the selected date
  var content = document.querySelector('.main');
  content.innerHTML = 'Content for ' + dateItems[index].textContent;
}
//end of dashboard script
const timelineContainer = document.querySelector('.timeline-container');
const content = document.querySelector('.content');

timelineContainer.addEventListener('scroll', function() {
    const timelineHeight = timelineContainer.clientHeight;
    const contentHeight = content.clientHeight;

    const scrollTop = timelineContainer.scrollTop;
    const scrollPercentage = (scrollTop / (contentHeight - timelineHeight)) * 100;

    const tasks = document.querySelectorAll('.task');

    tasks.forEach(task => {
        const taskPosition = task.offsetTop;
        const taskHeight = task.offsetHeight;

        if (taskPosition <= scrollTop && taskPosition + taskHeight >= scrollTop) {
            task.classList.add('active');
        } else {
            task.classList.remove('active');
        }
    });
});
