import './bootstrap';
import 'bootstrap';

// Function to pause all audio elements except the one currently playing
function pauseOtherAudios(currentAudio) {
    const audios = document.querySelectorAll('audio');
    audios.forEach(audio => {
      if (audio !== currentAudio) {
        audio.pause();
      }
    });
  }
  
  // Attach event listeners to each audio element
  document.querySelectorAll('audio').forEach(audio => {
    audio.addEventListener('play', () => pauseOtherAudios(audio));
  });
  