<?php //1ac325afafd59853face5a99b2fe6a59
/** @noinspection all */

namespace Illuminate\Foundation\Console {

    /**
     * @method static void dispatch(array $data)
     * @method static void dispatchNow(array $data)
     */
    class QueuedCommand {}
}

namespace Illuminate\Queue {

    /**
     * @method static void dispatch(SerializableClosure $closure)
     * @method static void dispatchNow(SerializableClosure $closure)
     */
    class CallQueuedClosure {}
}
