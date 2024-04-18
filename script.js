document.getElementById('activityForm').addEventListener('submit', function(event) {
  event.preventDefault();
  const activity = document.getElementById('activity').value;
  const time = document.getElementById('time').value;
  addActivity(activity, time);
});

function addActivity(activity, time) {
  const schedule = document.getElementById('schedule');
  const newActivity = document.createElement('div');
  newActivity.innerHTML = `<strong>${time}</strong>: ${activity}`;
  schedule.appendChild(newActivity);
}
