Data-Collector
===

data collector using [fluentd](http://fluentd.org)

### Input

Fluentd s input sources are enabled by selecting and configuring the desired
input plugins using `source` directives.

* http

the standard input plugin `http` turn fluentd into a http endpoint to accept
incoming HTTP messages.

* forward

the standard input plugin `forward` turn fluentd into a TCP endpoint to accept
TCP packets.

### Output

The most common use of the `match` directive is to output events to other
systems. Such as two standard output plugins include `file` and `forward`.

* Non-Buffered output plugins do not buffer data and immediately write out results.

* Buffered output plugins maintain a queue of chunks(a collection of events), and its behavior can be tuned by the "chunk limit" and "queue limit" parameters

* Time Sliced output plugins are in fact a type of bufferred plugin, but the chunks are keyed by time.

### Buffer

Buffer plugins are used by buffered output plugins. Users can choose the
buffer plugin that best suits their performance and reliability needs.


