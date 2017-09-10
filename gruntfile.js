// To define:
// - Compress: ZIP file name
// - BrowserSync: site url

module.exports = function(grunt) {
  grunt.initConfig({
    sass: {
      dist: {
        options: {
          cacheLocation: 'sass/.sass-cache',
          style: 'compressed'
        },
        files: {
          'css/styles.css': 'sass/styles.scss'
        }
      }
    },
    postcss: {
      options: {
        map: true,
        map: {
          inline: false,
          annotation: 'dist/css/maps/'
        },
        processors: [
          require('pixrem')(),
          require('autoprefixer')({browsers: 'last 2 versions'}),
          require('cssnano')()
        ]
      },
      dist: {
        src: 'css/styles.css'
      }
    },
    watch: {
      files: ['sass/**'],
      tasks: ['sass'],
    },
    browserSync: {
      bsFiles: {
        src: 'css/*.css'
      },
      options: {
        proxy: "filipvanreeth.dev"
      }
    }
  });
  // Register Tasks
  grunt.registerTask('sass', ['sass']);
  grunt.registerTask('dev', ['sass','postcss']);
  grunt.registerTask('prod', ['sass','postcss','compress']);
  // Load Tasks
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-csscomb');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-browser-sync');
};
