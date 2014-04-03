Data-Collector
===

data collector using [fluentd](http://fluentd.org)

Fluentd is written in c and ruby, ruby acts as a wrapper that provides flexibility to the overall solution.
The networking layer and object serialization layer are written in C. One pc one process can handle 18000
messages each second.

Fluentd consists of two main parts, input(source) and output(match), see `conf/fluent.conf` for detail.
Each fluentd event log consists of three components which are `tag`,`time` and `message`,
`tag` is used to route message within fluentd.

### Input

Fluentd s input sources are enabled by selecting and configuring the desired
input plugins using `source` directives.

* http

the standard input plugin `http` turn fluentd into a http endpoint to accept
incoming HTTP messages.

* forward

the standard input plugin `forward` turn fluentd into a TCP endpoint to accept
TCP packets.

More input plugin see [here](http://docs.fluentd.org/articles/input-plugin-overview)

### Output

The most common use of the `match` directive is to output events to other
systems. Such as two standard output plugins include `file` and `forward`.

* Non-Buffered output plugins do not buffer data and immediately write out results.

* Buffered output plugins maintain a queue of chunks(a collection of events), and its
behavior can be tuned by the "chunk limit" and "queue limit" parameters.

* Time Sliced output plugins are in fact a type of bufferred plugin, but the chunks are keyed by time.

More output plugin see [here](http://docs.fluentd.org/articles/output-plugin-overview)

### Buffer

Buffer plugins are used by buffered output plugins. Users can choose the
buffer plugin that best suits their performance and reliability needs.

More see [here](http://docs.fluentd.org/articles/buffer-plugin-overview).
