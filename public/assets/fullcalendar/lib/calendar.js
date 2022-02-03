// document.addEventListener('DOMContentLoaded', function() {
//     var calendarEl = document.getElementById('calendar');

//     var calendar = new FullCalendar.Calendar(calendarEl, {
//       headerToolbar: {
//         left: 'prev,next today',
//         center: 'title',
//         right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
//       },
//       initialDate: new Date(),
//       navLinks: true, 
//       selectable: true,
//       selectMirror: true,
//       select: function(arg) {
//         var title = prompt('Nouveaux job:');
//         if (title) {
//           calendar.addEvent({
//             title: title,
//             start: arg.start,
//             end: arg.end,
//             allDay: arg.allDay
//           })
//         }
//         calendar.unselect()
//       },
//       eventClick: function(arg) {
//         if (confirm('Voulez vous supprimer ce job ?')) {
//           arg.event.remove()
//         }
//       },
//       editable: true,
//       dayMaxEvents: true,
//       events: [
//         // ici la requet ajax recuperation des jobs
//       ]
//     });

//     calendar.render();
//     calendar.setOption('locale','fr');
    
//   });



//   function getdata()
//   {
//            $.ajax({
//                type: "GET",
//                url: "ad_intranet_modele_ajax_jobs.inc.php",
//                dataType : 'html',
//                success: function(data) {
//                    console.log(data);
//                    return data;
//                }
//   })
// }
 
// getdata()
