#!/usr/bin/env ruby

# This script takes as input the .erb files from the source/ folder
# and generates .html files into the html/ folder.

require 'erb'

INPUT_DIRECTORY="source"
OUTPUT_DIRECTORY="docs"

def process(inputFile, outputFile)
    template = File.read(inputFile)
    renderer = ERB.new(template)
    File.write(outputFile, renderer.result())
end

Dir["#{INPUT_DIRECTORY}/*.erb"].each do |filename|
    outputFilename = File.basename(filename, ".erb") + ".html"
    puts "Publishing #{filename} to #{OUTPUT_DIRECTORY}/#{outputFilename}..."
    process("#{filename}", "#{OUTPUT_DIRECTORY}/#{outputFilename}")
end

puts "Done."
