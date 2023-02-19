module.exports = function (grunt) {
  
  

  // Load all grunt tasks matching the ['grunt-*', '@*/grunt-*'] patterns
  require("load-grunt-tasks")(grunt);

  grunt.initConfig({

    info:{
      sourceDir: 'src/',
      distDir: 'dist/',
      componentsDir: '<%= info.sourceDir %>components',
      scssDir:'<%= info.sourceDir %>scss',
      scriptDir:'<%= info.sourceDir %>scripts'
    },

    clean:{
      options: {
        force: true
      },
      css: [
        '<%= info.distDir %>css/*.*'
      ],
      js:[
        '<%= info.distDir %>*.js'
      ]
    },


    sass: {      
      dev:{
        options: {                                // Target options
          style: 'expanded',
          sourceMap: true,
          loadPath: [
            'node_modules/bootstrap/scss',
            'src/scss'
          ]
        },
        files: {                                  // Dictionary of files
          '<%= info.distDir %>/css/main.css' : '<%= info.scssDir %>/main.scss',        // 'destination': 'source'
        }
      },
      prod:{
        options: {                       // Target options
          style: 'compressed'
        },
        files: {                         // Dictionary of files
          '<%= info.distDir %>/css/main.css' : '<%= info.scssDir %>/main.scss',       // 'destination': 'source'
        }
      }
    },

    watch:{
      sass: {
        files: ['scss/**/**.scss'],
        tasks: ['sass:dev']
      },
    }
    


  });


  grunt.registerTask('dev', [
    'sass:dev',
    'watch:sass'
  ]);

};
