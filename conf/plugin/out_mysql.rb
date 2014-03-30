module Fluent
    class MysqlOutput < Fluent::BufferedOutput
        Fluent::Plugin.register_output('mysql', self)
        def configure(conf)
            super
            @host = conf['host']
            @port = conf['port']
            @user = conf['user']
            @password = conf['password']
        end

        def start
            super
        end

        def shutdown
            super
        end

        def format(tag, time, record)
            [tag, time, record].to_json + "\n"
        end

        def write(chunk)
            data = chunk.read
            print data
        end
    end
end
