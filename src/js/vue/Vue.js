import $ from 'jquery'
import slick from 'slick-carousel';
import axios from 'axios';
new Vue({
  el: document.getElementById("app"),
  data: function () {
    return {
      mobileMenuOpen: false,
      testMessage: 'Hello world!',
      windowWidth: 0,
      paddingLeft: 0,
      shows: [],
      currentShow: null,
      currentShowSeasons: [],
      selectedSeason: '',
      showFilter: {
        selected: 'Show All',
        options: ['Show All', 'Recent', 'Scripted', 'Unscripted']
      }
    }
  },
  mounted() {
    this.windowResize()
    window.addEventListener('resize', this.windowResize);
    $('#carousel').slick({
      infinite: true,
      slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: false,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      arrows: true,


    });
  },
  created() {
    // media = wp-json/wp/v2/media
    
    if (window.location.href.indexOf("shows") != -1) {
      axios.get('/wp-json/wp/v2/shows?_embed')
        .then((response) => {
          console.log(response.data)
          this.populateShowData(response.data)
        })
        .catch(function (error) {
          console.log(error);
          return 'No shows'
        });
    } else {
      console.log('No data')
    }


  },
  components: { slick },
  computed: {
    threeMonths() {
      const d = new Date();
      console.log(d.toLocaleDateString());
      const month = d.getMonth();
      d.setMonth(d.getMonth() - 3);
      while (d.getMonth() === month) {
        d.setDate(d.getDate() - 3);
      }
      return d.toISOString().split('T')[0]
    },
    pageSlug() {
      return location.pathname.split('/').slice(1)[1]
    },


    visibleShows() {
      let published = this.shows.filter(x => x.status == 'publish')
      if (this.showFilter.selected != 'Show All' && this.showFilter.selected != 'Recent') {
        return this.showFilter.selected == 'Scripted' ? published.filter(y => y.acf.scripted == true) : published.filter(y => !y.acf.scripted)
      } else if (this.showFilter.selected == 'Recent') {
        return published.filter(z => z.date >= this.threeMonths)
      } else if (this.showFilter.selected == 'Show All') {
        return published
      }
    },
    showMenu() {
      return this.mobileMenuOpen && this.windowWidth < 770 ? true : false
    },
  },
  methods: {

    populateShowData(shows) {
      this.shows = shows
      let current;
      let seasons = []
      shows.forEach(element => {
        current = element.slug == this.pageSlug ? element : []
      });

      if (current.acf) {
        current.acf.epsodes.forEach(element => {
          let x = element.episode.series
          if (!seasons.includes(x)) {
            seasons.push(x)
          }
        });
      }

      this.currentShow = current
      this.currentShowSeasons = seasons
      this.selectedSeason = seasons[0]
    },


    toggleSelection(menu) {
      this.$refs[menu].classList.toggle('bg-turqDark bg-turq')
      this.$refs[menu + '-options'].classList.toggle('hidden')
    },
    toggleMenu() {
      this.$refs['mainMenu'].classList.toggle('hidden')
      this.mobileMenuOpen = !this.mobileMenuOpen
    },
    footerSlide(x) {
      this.$refs[x].classList.toggle('hidden')
      this.$refs['arrow-' + x].classList.toggle('rotate-180')
    },
    windowResize() {
      this.windowWidth = window.innerWidth
      this.paddingLeft = this.windowWidth > 1024 ? document.getElementById('mainMenu').getBoundingClientRect().x + 'px' : '1rem'
    },
  }
});
