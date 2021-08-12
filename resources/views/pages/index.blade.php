@extends('layouts.app')
@section('content')
    <h1>{{ $title }}</h1>
    @guest
        <p>You can read all blog posts posted by our users <a href="/posts">here</a>. You can even write your own blog post by either logging in or registering.</p>
    @else
        <p>As a registered user, you can post your own blog posts <a href="/posts/create">here</a>. You can also search through all of the blog posts and can edit or delete any of your posts. To view all of your posts, <a href="/dashboard">click here</a>.</p>
    @endguest
    <p>
        Blowfish librantur in se quatuor, quinquies maior quam normalis, et quare? Quare id faciam? Ut terrorem facit, qui quid. Terrent! Ut alter, scarier pisces agminis off. Et quod tu es? Vos blowfish. Tu iustus in omnibus visio. Vides ... suus ' suus 'non aliud aerem. Nunc ... qui cum partibus blowfish Isai? Tu damnare ius. Vos blowfish. Dicere iterum. Dicere illam quasi velis eam. Es BLOWFISH! 
    </p>
    <p>
        Ut sibi fuerat socius sagittis. Ego intervenerit. Vere quia a te nuper iratus occidit illos undecim annorum puer. Deinde, si hoc forte qui fuit imperavit. 
    </p>
    <p>
        Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. 
    </p>
    <p>
        Mauris a nunc occideritis me rectum. Videtur quod Ive facillimum, qui fecit vos. Potes me interficere, sine testibus et tunc manere in pauci weeks vel mensis vestigia Isai Pinkman et vos quoque illum occidere. Exercitium inutili option A. Videtur mihi quod autem est. 
    </p>
@endsection
