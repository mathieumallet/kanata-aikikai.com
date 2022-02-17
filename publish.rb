#!/usr/bin/env ruby

# This script takes as input the .erb files from the source/ folder
# and generates .html files into the publish/ folder.

require 'erb'

INPUT_DIRECTORY="source"
OUTPUT_DIRECTORY="publish"

def process(inputFile, outputFile)
    template = File.read(inputFile)
    renderer = ERB.new(template)
    File.write(outputFile, renderer.result())
end

process("source/about.erb", "publish/about.html")
