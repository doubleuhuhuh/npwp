module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		compass: {
			dist: {
				options: {
					sassDir: 'wp-content/themes/_np/sass',
					cssDir: 'wp-content/themes/_np/css',
					imagesDir: 'wp-content/themes/_np/images',
					config: 'config.rb',
					environment: 'development'
				}
			}
		},

		sass: {
			options: {
				style: 'compressed',
				compass: true
			},
			devOzt: {

				options: {
					sourcemap: 'auto'
				},

				files: {
					'wp-content/themes/_np/css/main.css': 'wp-content/themes/_np/sass/main.scss'
				}

			},
			live: {

				options: {
					sourcemap: 'none'
				},

				files: {
					'wp-content/themes/_np/css/main.css': 'wp-content/themes/_np/sass/main.scss'
				}
			}
		},

		uglify: {
			options: {
				banner: '/*! <%= grunt.template.today("yyyy-mm-dd, h:MM:ss TT") %> */\n'
			},
			dev: {

				options: {
					sourceMap: 'wp-content/themes/_np/js/app.min.js.map'
				},

				src: 'wp-content/themes/_np/js/scripts/*',
				dest: 'wp-content/themes/_np/js/app.min.js'
			},
			live: {
				src: 'wp-content/themes/_np/js/scripts/*',
				dest: 'wp-content/themes/_np/js/app.min.js'
			}
		},

		watch: {
			options: {
				atBegin: true,
				livereload: true
			},
			sassOzt: {
				files: [
					'wp-content/themes/_np/sass/*.scss',
					'wp-content/themes/_np/sass/**/*.scss'

				],
				tasks: ['sass:devOzt']
			},
			js: {
				files: ['wp-content/themes/_np/js/scripts/*'],
				tasks: ['uglify:dev']
			}
		}
	});

	//grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['sass:live', 'uglify:live']);

};