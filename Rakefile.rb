# Author: Joseph Pecoraro
# Date: Saturday, May 16, 2009
# Description: Runs Markdown to generate the html.

# Setup
verbose(true)
task :default => :run

# run
desc "Generates the html file from the markdown file."
task :run do
	puts "Generating HTML from content.markdown:"
	sh "perl tools/Markdown.pl content.markdown > content.html"
	puts
	puts "Generation complete."
end
