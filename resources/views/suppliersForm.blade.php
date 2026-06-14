@extends('layouts.master')


@section('body')
    <div class="pointer-events-none fixed inset-0 overflow-hidden">
        <div class="absolute -left-16 top-8 h-48 w-48 rounded-full bg-white/10 blur-2xl"></div>
        <div
            class="absolute right-0 top-0 h-72 w-72 translate-x-1/4 -translate-y-1/4 rotate-12 bg-white/10 [clip-path:polygon(50%_0%,100%_50%,50%_100%,0%_50%)]">
        </div>
        <div class="absolute bottom-10 left-10 h-40 w-40 bg-[#fff629]/10 [clip-path:polygon(50%_0%,0%_100%,100%_100%)]">
        </div>
        <div class="absolute bottom-0 right-10 h-56 w-56 rounded-full bg-white/5 blur-3xl"></div>
    </div>

    <main class="relative z-10 px-4 py-10 sm:px-6 lg:px-8">
        <section
            class="mx-auto grid w-full max-w-6xl overflow-hidden rounded-4xl border border-white/15 bg-white/10 shadow-[0_30px_90px_rgba(14,5,30,0.45)] backdrop-blur-xl lg:grid-cols-[0.9fr_1.1fr]">
            <aside class="hidden lg:flex flex-col justify-between bg-[#2a0d45]/85 px-10 py-10">
                <div>
                    <div class="inline-flex items-center gap-3">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#fff629] text-[#43186a] shadow-lg shadow-[#fff629]/20">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M3 7h18" />
                                <path d="M6 3h12l3 4v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7l3-4Z" />
                                <path d="M9 11h6" />
                                <path d="M9 15h6" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.28em] text-[#fff629]">Tourifique</p>
                            <p class="mt-1 text-sm text-white/60">Supplier onboarding</p>
                        </div>
                    </div>

                    <h1 class="mt-10 max-w-sm text-4xl font-extrabold leading-tight text-white">
                        Join creator-led travel collaborations.
                    </h1>
                    <p class="mt-5 max-w-md text-sm leading-7 text-white/70">
                        This form helps Tourifique understand whether your business is a good fit for Travelpreneur
                        partnerships. Keep it light, clear, and focused on the essentials to reduce drop-off and make
                        onboarding easier.[web:74][web:78]
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-3 rounded-2xl border border-white/10 bg-white/5 p-4">
                            <span
                                class="mt-0.5 flex h-7 w-7 items-center justify-center rounded-full bg-[#fff629] text-xs font-bold text-[#43186a]">1</span>
                            <div>
                                <p class="text-sm font-semibold text-white">Business fit</p>
                                <p class="mt-1 text-xs leading-6 text-white/60">Collect only the business, contact, and
                                    collaboration details needed for a first-pass qualification.[web:74][web:82]</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 rounded-2xl border border-white/10 bg-white/5 p-4">
                            <span
                                class="mt-0.5 flex h-7 w-7 items-center justify-center rounded-full bg-[#fff629] text-xs font-bold text-[#43186a]">2</span>
                            <div>
                                <p class="text-sm font-semibold text-white">Quick review</p>
                                <p class="mt-1 text-xs leading-6 text-white/60">A standardized supplier form makes
                                    evaluation more consistent and easier to test during onboarding.[web:78][web:82]</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 rounded-2xl border border-white/10 bg-white/5 p-4">
                            <span
                                class="mt-0.5 flex h-7 w-7 items-center justify-center rounded-full bg-[#fff629] text-xs font-bold text-[#43186a]">3</span>
                            <div>
                                <p class="text-sm font-semibold text-white">Clear expectations</p>
                                <p class="mt-1 text-xs leading-6 text-white/60">Suppliers respond better when the process
                                    explains what information is needed and how the partnership works.[web:76][web:82]</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                    <p class="text-xs uppercase tracking-[0.25em] text-white/45">Ideal suppliers</p>
                    <div class="mt-4 flex flex-wrap gap-2 text-xs font-medium text-white/80">
                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-2">Hotels</span>
                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-2">Restaurants</span>
                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-2">Tour Operators</span>
                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-2">Local Guides</span>
                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-2">Experiences</span>
                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-2">Wellness</span>
                    </div>
                </div>
            </aside>

            <div class="bg-white px-6 py-8 text-slate-900 sm:px-8 lg:px-10 lg:py-10">
                <div class="mx-auto max-w-2xl">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.28em] text-[#43186a]">Supplier interest
                                form</p>
                            <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-950">Apply to partner with
                                Tourifique</h2>
                            <p class="mt-3 max-w-xl text-sm leading-6 text-slate-500">
                                Share five contact emails for the people who should receive supplier updates. For a
                                hackathon prototype, this keeps the form lightweight and focused on one simple action.
                            </p>
                        </div>
                        <div
                            class="hidden rounded-2xl bg-[#fff629] px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-[#43186a] sm:block">
                            1 min
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="mt-6 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-700">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form method="POST" action="" class="mt-8 space-y-8">
                        @csrf

                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-[0.2em] text-[#43186a]">Email contacts</h3>
                            <p class="mt-3 text-sm leading-6 text-slate-500">
                                Add up to five emails for supplier updates and follow-up.
                            </p>
                            <div class="mt-4 grid gap-4">
                                <div>
                                    <label for="email_1"
                                        class="mb-2 block text-sm font-semibold text-slate-700">Email 1</label>
                                    <input id="email_1" name="email_1" type="email" value="{{ old('email_1') }}"
                                        required
                                        class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-[#43186a] focus:ring-4 focus:ring-[#43186a]/10"
                                        placeholder="first@example.com">
                                </div>

                                <div>
                                    <label for="email_2"
                                        class="mb-2 block text-sm font-semibold text-slate-700">Email 2</label>
                                    <input id="email_2" name="email_2" type="email" value="{{ old('email_2') }}"
                                        required
                                        class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-[#43186a] focus:ring-4 focus:ring-[#43186a]/10"
                                        placeholder="second@example.com">
                                </div>

                                <div>
                                    <label for="email_3"
                                        class="mb-2 block text-sm font-semibold text-slate-700">Email 3</label>
                                    <input id="email_3" name="email_3" type="email" value="{{ old('email_3') }}"
                                        required
                                        class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-[#43186a] focus:ring-4 focus:ring-[#43186a]/10"
                                        placeholder="third@example.com">
                                </div>

                                <div>
                                    <label for="email_4"
                                        class="mb-2 block text-sm font-semibold text-slate-700">Email 4</label>
                                    <input id="email_4" name="email_4" type="email" value="{{ old('email_4') }}"
                                        required
                                        class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-[#43186a] focus:ring-4 focus:ring-[#43186a]/10"
                                        placeholder="fourth@example.com">
                                </div>

                                <div>
                                    <label for="email_5"
                                        class="mb-2 block text-sm font-semibold text-slate-700">Email 5</label>
                                    <input id="email_5" name="email_5" type="email" value="{{ old('email_5') }}"
                                        required
                                        class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-[#43186a] focus:ring-4 focus:ring-[#43186a]/10"
                                        placeholder="fifth@example.com">
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex flex-col gap-4 border-t border-slate-200 pt-6 sm:flex-row sm:items-center sm:justify-between">
                            <p class="text-sm text-slate-500">
                                This version keeps the supplier intake focused on contact emails only.
                            </p>
                            <button type="submit"
                                class="inline-flex items-center justify-center rounded-2xl bg-[#43186a] px-6 py-3 text-sm font-bold text-[#fff629] transition hover:bg-[#2d1047] focus:outline-none focus:ring-4 focus:ring-[#43186a]/15">
                                Submit emails
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
