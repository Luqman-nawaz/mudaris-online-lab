$(document).ready(function() {
    calculatePerformance();
  
    function calculatePerformance() {
      $('tbody tr').each(function() {
        var totalLabs = parseInt($(this).find('.total-labs').val());
        var labsSubmitted = parseInt($(this).find('.labs-submitted').val());
        var labsMissed = parseInt($(this).find('.labs-missed').text());
  
        var labMarks = generateDummyMarks(totalLabs);
        var totalMarks = labMarks.reduce((a, b) => a + b, 0);
        var marksPerLab = totalMarks / totalLabs;
  
        var percentage = (labsSubmitted / totalLabs) * 100;
  
        $(this).find('.lab-marks').text(labMarks.join(', '));
        $(this).find('.percentage').text(percentage.toFixed(2) + '%');
      });
    }
  
    function generateDummyMarks(totalLabs) {
      var labMarks = [];
      for (var i = 0; i < totalLabs; i++) {
        var marks = Math.floor(Math.random() * 11); // Generate a random mark between 0 and 10
        labMarks.push(marks);
      }
      return labMarks;
    }
  });